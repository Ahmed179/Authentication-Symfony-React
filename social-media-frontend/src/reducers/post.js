import { SET_POSTS } from "actions/types"

const initialState = []

function PostReducer(state = initialState, { type, payload }) {
  switch (type) {
    case SET_POSTS:
      return payload
    default:
      return state
  }
}

export default PostReducer
