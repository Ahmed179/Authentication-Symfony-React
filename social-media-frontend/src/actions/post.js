import * as PostService from "services/post.service"
import { SET_POSTS, SET_POST, UPDATE_POST, ADD_POST } from "./types"

function redirectUnauthorized(err) {
  if (err.response?.status === 401) {
    localStorage.removeItem("token")
    window.location.href = "/login"
  }
}

export const getPosts = page => async dispatch => {
  try {
    const response = await PostService.getPosts(page, 5)
    dispatch({
      type: SET_POSTS,
      payload: {
        ...response.data,
        data: response.data.data.data
      }
    })
  } catch (error) {
    redirectUnauthorized(error)
  }
}

export const getPost = id => async dispatch => {
  try {
    const response = await PostService.getPost(id)
    const [post] = response.data.data
    dispatch({ type: SET_POST, payload: { postID: post.id, post } })
  } catch (error) {
    redirectUnauthorized(error)
  }
}

export const createPost = content => async dispatch => {
  try {
    const response = await PostService.createPost({ content })
    const [post] = response.data.data
    dispatch({ type: ADD_POST, payload: { post } })
  } catch (error) {
    redirectUnauthorized(error)
  }
}

export const updatePost = (id, content) => async dispatch => {
  try {
    const response = await PostService.updatePost(id, { content })
    const [post] = response.data.data
    dispatch({ type: UPDATE_POST, payload: { postID: post.id, content: post.content } })
  } catch (error) {
    redirectUnauthorized(error)
  }
}

export const deletePost = id => async () => {
  try {
    await PostService.deletePost(id)
  } catch (error) {
    redirectUnauthorized(error)
  }
}
