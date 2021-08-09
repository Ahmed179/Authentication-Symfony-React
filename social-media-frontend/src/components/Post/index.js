import React from "react"
import { useDispatch } from "react-redux"
import { deletePost, getPosts } from "actions/post"
import { Avatar } from "@material-ui/core"
import ArrowUpwardOutlinedIcon from "@material-ui/icons/ArrowUpwardOutlined"
import ArrowDownwardOutlinedIcon from "@material-ui/icons/ArrowDownwardOutlined"
import DeleteIcon from "@material-ui/icons/Delete"
import CreateIcon from "@material-ui/icons/Create"

import "./post.css"

function Post({ id, content, user, onEdit }) {
  const dispatch = useDispatch()

  async function doDeletePost() {
    await dispatch(deletePost(id))
    await dispatch(getPosts())
  }

  return (
    <div className="container">
      <div className="post">
        <div className="post__info">
          <Avatar src="https://www.findcollab.com/img/user-folder/5d95c9a53b2e1qq.png" />
          <h4>{user.username}</h4>
        </div>
        <div className="post__body">
          <div className="post__question">{content}</div>
        </div>
        <div className="post__footer">
          <div className="post__footerAction">
            <ArrowUpwardOutlinedIcon />
            <ArrowDownwardOutlinedIcon />
          </div>
          <div className="post__footerLeft">
            <CreateIcon className="edit_icon" onClick={onEdit} />
            <DeleteIcon className="delete_icon" onClick={doDeletePost} />
          </div>
        </div>
      </div>
    </div>
  )
}

export default Post
