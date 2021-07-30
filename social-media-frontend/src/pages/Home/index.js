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
      {posts.map(({ id, content, user, is_private }, index) => (
        <Post
          key={index}
          id={id}
          content={content}
          user={user}
          onEdit={() => {
            setModalData({ id, content, isPrivate: is_private })
            setIsModalOpen(true)
          }}
        />
      ))}
    </div>
  )
}

export default Home
