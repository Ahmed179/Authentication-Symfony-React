import {
  REGISTER_SUCCESS,
  REGISTER_FAIL,
  LOGIN_SUCCESS,
  LOGIN_FAIL,
  LOGOUT
} from "../actions/types"

const token = localStorage.getItem("token")
let user = localStorage.getItem("user")

user = JSON.parse(user)
const initialState = { isLoggedIn: !!token, user: user}

function AuthReducer(state = initialState, { type, payload }) {
  switch (type) {
    case REGISTER_SUCCESS:
      return { ...state, isLoggedIn: false }
    case REGISTER_FAIL:
      return { ...state, isLoggedIn: false }
    case LOGIN_SUCCESS:
      return { ...state, isLoggedIn: true, user: payload }
    case LOGIN_FAIL:
      return { ...state, isLoggedIn: false }
    case LOGOUT:
      return { ...state, isLoggedIn: false, user: null }
    default:
      return state
  }
}

export default AuthReducer
