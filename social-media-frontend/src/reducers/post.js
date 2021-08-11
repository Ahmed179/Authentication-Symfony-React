import { SET_POSTS, DELETE_POST, SET_POST, UPDATE_POST, CLEAR_POSTS, ADD_POST } from "actions/types"

const initialState = {
  data: [],
  page: 0,
  per_page: 0,
  total_count: 0,
  total_pages: 0
}

function doSetPostsData(state, payload) {
  const posts = [...state.data, ...payload.data]
  return { ...state, ...payload, data: posts }
}

function doAddPost(state, { post }) {
  const posts = [...state.data, post]
  return { ...state, data: posts }
}

function doSetPostData(state, payload) {
  const ID = payload.postID
  const post = payload.post

  const posts = [...state.data]
  const _post = posts.find(post => post.id === ID)
  const index = posts.indexOf(_post)

  posts[index] = post
  return { ...state, data: posts }
}

function doUpdatePost(state, payload) {
  const ID = payload.postID
  const content = payload.content

  const posts = [...state.data]
  const _post = posts.find(post => post.id === ID)
  const index = posts.indexOf(_post)

  posts[index].content = content
  return { ...state, data: posts }
}

function doDeletePost(state, payload) {
  const ID = payload.postID
  const posts = state.data.filter(post => post.id !== ID)
  return { ...state, data: posts }
}

function PostReducer(state = initialState, { type, payload }) {
  switch (type) {
    case SET_POSTS:
      return doSetPostsData(state, payload)
    case SET_POST:
      return doSetPostData(state, payload)
    case ADD_POST:
      if (state.data.length % state.per_page === 0) return state
      return doAddPost(state, payload)
    case UPDATE_POST:
      return doUpdatePost(state, payload)
    case DELETE_POST:
      return doDeletePost(state, payload)
    case CLEAR_POSTS:
      return { ...initialState }
    default:
      return state
  }
}

export default PostReducer
