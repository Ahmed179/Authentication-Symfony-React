import { useState } from "react"
import "./style.css"

function ContentEditor({ initialContent, edit, onCheck, setIsEditing }) {
  const [content, setContent] = useState(initialContent || "")

  function handleCancelClick() {
    setContent(initialContent || "")
    setIsEditing(false)
  }

  function handleCheckClick() {
    onCheck(content)
    setIsEditing(false)
  }

  return edit ? (
    <div className="content-editor">
      <input value={content} onChange={e => setContent(e.target.value)} />
      <div className="content-editor-cancel" onClick={handleCancelClick}></div>
      <div className="content-editor-check" onClick={handleCheckClick}></div>
    </div>
  ) : (
    <div className="content-editor-text">{initialContent}</div>
  )
}

export default ContentEditor
