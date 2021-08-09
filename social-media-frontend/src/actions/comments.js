import * as CommentService from "services/comment.service"

function redirectUnauthorized(err) {
  if (err.response.status === 401) {
    localStorage.removeItem("token")
    window.location.href = "/login"
  }
}

export const createComment = (content, post_id, user_id) => () => {
  return new Promise(resolve =>
    CommentService.createComment({ comment_content: content, post_id, user_id })
      .then(resolve)
      .catch(redirectUnauthorized)
  )
}

export const updateComment = (id, content) => () => {
  return new Promise(resolve =>
    CommentService.updateComment(id, { comment_content: content })
      .then(resolve)
      .catch(redirectUnauthorized)
  )
}

export const deleteComment = id => () => {
  return new Promise(resolve =>
    CommentService.deleteComment(id).then(resolve).catch(redirectUnauthorized)
  )
}
