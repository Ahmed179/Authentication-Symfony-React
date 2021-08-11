import React, { useState } from "react"
import { DELETE_POST } from "actions/types"
import { useSelector, useDispatch } from "react-redux"
import { deletePost, updatePost, getPost } from "actions/post"
import { createComment } from "actions/comments"
import { Avatar } from "@material-ui/core"
import DeleteIcon from "@material-ui/icons/Delete"
import CreateIcon from "@material-ui/icons/Create"
import MessageIcon from "@material-ui/icons/Message"
import Comment from "components/Comment"
import ContentEditor from "components/ContentEditor"
import SendIcon from "@material-ui/icons/Send"
import "./post.css"

function Post({ postID, content, user, comments, canUpdate }) {
  const dispatch = useDispatch()
  const _user = useSelector(state => state.auth.user)

  const [commentsVisible, setCommentsVisible] = useState(false)
  const [isEditing, setIsEditing] = useState(false)
  const [comment, setComment] = useState("")

  async function doDeletePost() {
    dispatch({ type: DELETE_POST, payload: { postID } })
    await dispatch(deletePost(postID))
  }

  async function doCreateComment() {
    await dispatch(createComment(comment, postID, _user.id))
    await dispatch(getPost(postID))
    setComment("")
  }

  async function doUpdatePost(content) {
    await dispatch(updatePost(postID, content))
  }

  return (
    <div className="container">
      <div className="post">
        <div className="post__info">
          <Avatar src="https://www.findcollab.com/img/user-folder/5d95c9a53b2e1qq.png" />
          <h4>{user.username}</h4>
        </div>
        <div className="post__body">
          <ContentEditor
            className="hi"
            initialContent={content}
            edit={isEditing}
            onCheck={doUpdatePost}
            setIsEditing={setIsEditing}
          />
        </div>
        <div className="post__footer">
          <MessageIcon onClick={() => setCommentsVisible(!commentsVisible)} />
          <div className="post__footerLeft">
            {canUpdate && (
              <>
                <CreateIcon className="edit_icon" onClick={() => setIsEditing(!isEditing)} />
                <DeleteIcon className="delete_icon" onClick={doDeletePost} />
              </>
            )}
          </div>
        </div>
      </div>

      {commentsVisible && (
        <>
          <div className="create-comment">
            <input
              className="comment-input"
              value={comment}
              placeholder="Write a comment..."
              onChange={e => setComment(e.target.value)}
            />
            <SendIcon className="create-comment-button" onClick={doCreateComment} />
          </div>
          {comments.data.map(({ id, user, content }) => (
            <Comment
              key={id}
              id={id}
              postID={postID}
              user={user}
              content={content}
              canUpdate={_user?.id === user.id}
            />
          ))}
        </>
      )}
    </div>
  )
}

export default Post
