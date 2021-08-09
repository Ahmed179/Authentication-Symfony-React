import * as PostService from "services/post.service"
import { SET_POSTS } from "./types"

function redirectUnauthorized(err) {
  if (err.response.status === 401) {
    localStorage.removeItem("token")
    window.location.href = "/login"
  }
}

export const getPosts = () => dispatch => {
  return new Promise(resolve =>
    PostService.getPosts()
      .then(({ data }) => {
        dispatch({ type: SET_POSTS, payload: data.data })
        return resolve()
      })
      .catch(redirectUnauthorized)
  )
}

export const createPost = content => () => {
  return new Promise(resolve =>
    PostService.createPost({ content }).then(resolve).catch(redirectUnauthorized)
  )
}

export const updatePost = (id, content) => () => {
  return new Promise(resolve =>
    PostService.updatePost(id, { content }).then(resolve).catch(redirectUnauthorized)
  )
}

export const deletePost = id => () => {
  return new Promise(resolve =>
    PostService.deletePost(id).then(resolve).catch(redirectUnauthorized)
  )
}
