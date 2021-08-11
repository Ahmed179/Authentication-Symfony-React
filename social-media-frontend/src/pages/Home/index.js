import { useEffect } from "react"
import { useSelector, useDispatch } from "react-redux"
import { getPosts } from "actions/post"
import Navbar from "components/Navbar"
import Post from "components/Post"
import { CLEAR_POSTS } from "actions/types"
function Home() {
  const dispatch = useDispatch()
  const posts = useSelector(state => state.posts)
  const user = useSelector(state => state.auth.user)

  useEffect(() => {
    if (!dispatch) return
    dispatch({ type: CLEAR_POSTS })
    dispatch(getPosts(1))
  }, [dispatch])

  function doLoadMorePosts() {
    dispatch(getPosts(posts.page + 1))
  }

  return (
    <div className="home">
      <Navbar />
      <div style={{ display: "flex", flexDirection: "column", alignItems: "center" }}>
        {posts.data.map((post, index) => (
          <Post
            key={index}
            postID={post.id}
            content={post.content}
            comments={post.comments}
            user={post.user}
            canUpdate={user?.id === post.user.id}
          />
        ))}
        <div className="show_more" onClick={doLoadMorePosts}>
          Show more...
        </div>
      </div>
    </div>
  )
}

export default Home
