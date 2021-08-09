import { useEffect } from "react"
import { useSelector, useDispatch } from "react-redux"
import { getPosts } from "actions/post"
import Navbar from "components/Navbar"
import Post from "components/Post"
import $ from "jquery"

function Home() {
  const dispatch = useDispatch()

  const posts = useSelector(state => state.posts)
  const user = useSelector(state => state.auth.user)

  useEffect(() => {
    dispatch(getPosts())
    $(window).on("scroll", handlePageScroll)
    return () => $(window).off("scroll", handlePageScroll)
  }, [])

  function handlePageScroll() {
    const WINDOW_SCROLL_TOP = $(window).scrollTop()
    const WINDOW_HEIGHT = $(window).height()
    const DOCUMENT_HEIGHT = $(document).height()

    if (WINDOW_SCROLL_TOP + WINDOW_HEIGHT === DOCUMENT_HEIGHT) {
    }
  }

  return (
    <div className="home">
      <Navbar />
      {posts.map((post, index) => (
        <Post
          key={index}
          id={post.id}
          content={post.content}
          comments={post.comments}
          user={post.user}
          canUpdate={user?.id === post.user.id}
        />
      ))}
    </div>
  )
}

export default Home
