import { useEffect, useState } from "react"
import Modal from "react-modal"
import { Switch, Input } from "@material-ui/core"

Modal.setAppElement("#root")

function CustomModal({ title, isOpen, setIsOpen, initialData, onSubmit, submitBtn }) {
  const [isPrivate, setIsPrivate] = useState(false)
  const [content, setContent] = useState("")

  useEffect(() => {
    if (!initialData) return
    setIsPrivate(initialData.isPrivate)
    setContent(initialData.content)
  }, [initialData])

  return (
    <Modal
      isOpen={isOpen}
      onRequestClose={() => setIsOpen(false)}
      shouldCloseOnOverlayClick={true}
      style={{
        overlay: {
          width: "100%",
          height: "100%",
          backgroundColor: "rgba(0,0,0,0.8)"
        },
        content: {
          width: 700,
          height: 600,
          zIndex: 10000,
          backgroundColor: "white",
          top: "50%",
          left: "50%",
          borderRadius: "1%",
          marginTop: "-300px",
          marginLeft: "-350px"
        }
      }}
    >
      <div className="modal__title">
        <h3>{title}</h3>
      </div>

      <div className="modal__info">
        <div className="modal_privacy_title">Private:</div>
        <div className="modal__scope">
          <Switch checked={isPrivate} onChange={(_, value) => setIsPrivate(value)} />
        </div>
      </div>
      <div className="modal__Field">
        <Input
          value={content}
          onChange={e => setContent(e.target.value)}
          type="text"
          placeholder="Write your post here... "
        />
      </div>
      <div className="modal__buttons">
        <button className="cancel" onClick={() => setIsOpen(false)}>
          Cancel
        </button>
        <button
          type="submit"
          className="add"
          onClick={() => {
            onSubmit({ ...initialData, content, isPrivate })
            setIsPrivate(false)
            setContent("")
          }}
        >
          {submitBtn}
        </button>
      </div>
    </Modal>
  )
}

export default CustomModal
