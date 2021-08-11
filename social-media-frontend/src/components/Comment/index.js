import React, { useState } from "react"
import { useDispatch } from "react-redux"
import { Avatar } from "@material-ui/core"
import DeleteIcon from "@material-ui/icons/Delete"
import CreateIcon from "@material-ui/icons/Create"
import ReplyIcon from "@material-ui/icons/Reply"
import ContentEditor from "components/ContentEditor"
import { updateComment, deleteComment } from "actions/comments"
import { getPost } from "actions/post"
import "./comment.css"

function Comment({ id, postID, user, content, canUpdate }) {
  const dispatch = useDispatch()
  const [isEditing, setIsEditing] = useState(false)

  async function doDeleteComment() {
    await dispatch(deleteComment(id))
    await dispatch(getPost(postID))
  }

  async function doUpateComment(content) {
    await dispatch(updateComment(id, content))
    await dispatch(getPost(postID))
  }

  return (
    <div className="container">
      <div className="comment">
        <div className="comment__info">
          <Avatar src="https://www.findcollab.com/img/user-folder/5d95c9a53b2e1qq.png" />
          <h4>{user.username}</h4>
        </div>
        <div className="comment__body">
          <ContentEditor
            initialContent={content}
            edit={isEditing}
            setIsEditing={setIsEditing}
            onCheck={doUpateComment}
          />
        </div>
        <div className="comment__footer">
          <ReplyIcon />
          <div className="comment__footerLeft">
            {canUpdate && (
              <>
                <CreateIcon className="edit_icon" onClick={() => setIsEditing(!isEditing)} />
                <DeleteIcon className="delete_icon" onClick={doDeleteComment} />
              </>
            )}
          </div>
        </div>
      </div>
    </div>
  )
}

export default Comment
