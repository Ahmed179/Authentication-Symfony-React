import { useState, useEffect } from "react"
import { useSelector, useDispatch } from "react-redux"
import { getPosts, updatePost } from "actions/post"
import Modal from "components/Modal"
import Navbar from "components/Navbar"
import Post from "components/Post"

function Home() {
  const dispatch = useDispatch()
  const [isModalOpen, setIsModalOpen] = useState(false)
  const [modalData, setModalData] = useState()

  const posts = useSelector(state => state.post.posts)
  const user = useSelector(state => state.auth.user)

  async function doUpdatePost({ id, content, isPrivate }) {
    await dispatch(updatePost(id, content, isPrivate))
    await dispatch(getPosts())
    setIsModalOpen(false)
    setModalData()
  }

  useEffect(() => {
    dispatch(getPosts())
  }, [])

  return (
    <div className="App">
      <Navbar />
      <Modal
        title="Update post"
        initialData={modalData}
        isOpen={isModalOpen}
        setIsOpen={setIsModalOpen}
        onSubmit={doUpdatePost}
        submitBtn="Edit Post"
      />
      {posts.map((post, index) => (
        <Post
          key={index}
          id={post.id}
          content={post.content}
          user={post.user}
          canUpdate={user?.id === post.user.id}
          onEdit={() => {
            setModalData({ id: post.id, content: post.content, isPrivate: post.is_private })
            setIsModalOpen(true)
          }}
        />
      ))}
    </div>
  )
}

export default Home
