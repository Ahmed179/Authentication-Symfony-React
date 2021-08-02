import { SET_POSTS } from "actions/types"

const initialState = { posts: [] }

function PostReducer(state = initialState, { type, payload }) {
  switch (type) {
    case SET_POSTS:
      return { ...state, posts: payload }
    default:
      return state
  }
}

export default PostReducer
