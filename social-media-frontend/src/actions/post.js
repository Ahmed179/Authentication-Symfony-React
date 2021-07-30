import * as PostService from "services/post.service"
import { SET_POSTS } from "./types"

export const getPosts = () => dispatch => {
  return new Promise(resolve =>
    PostService.getPosts().then(response => {
      dispatch({ type: SET_POSTS, payload: response.data })
      return resolve()
    })
  )
}

export const createPost = (content, is_private) => () => {
  return new Promise(resolve =>
    PostService.createPost({ user_id: 17, content, is_private }).then(resolve)
  )
}

export const updatePost = (id, content, is_private) => () => {
  return new Promise(resolve => PostService.updatePost(id, { content, is_private }).then(resolve))
}

export const deletePost = id => () => {
  return new Promise(resolve => PostService.deletePost(id).then(resolve))
}
