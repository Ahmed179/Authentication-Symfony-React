import * as PostService from "services/post.service"
import { SET_POSTS } from "./types"
function redirectUnauthorized(err) {
  if (err.response.status === 401) {
    localStorage.removeItem("token")
    window.location.href = "/login"
  }
}
export const getPosts = () => dispatch => {
  return new Promise((resolve, reject) =>
    PostService.getPosts()
      .then(response => {
        dispatch({ type: SET_POSTS, payload: response.data })
        return resolve()
      })
      .catch(redirectUnauthorized)
  )
}

export const createPost = (content, is_private) => () => {
  return new Promise(resolve =>
    PostService.createPost({ content, is_private }).then(resolve).catch(redirectUnauthorized)
  )
}

export const updatePost = (id, content, is_private) => () => {
  return new Promise(resolve =>
    PostService.updatePost(id, { content, is_private }).then(resolve).catch(redirectUnauthorized)
  )
}

export const deletePost = id => () => {
  return new Promise(resolve =>
    PostService.deletePost(id).then(resolve).catch(redirectUnauthorized)
  )
}
