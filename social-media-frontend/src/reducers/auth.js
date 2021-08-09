import {
  REGISTER_SUCCESS,
  REGISTER_FAIL,
  LOGIN_SUCCESS,
  LOGIN_FAIL,
  LOGOUT,
} from "../actions/types"

const token = localStorage.getItem("token")
const initialState = { isLoggedIn: !!token }

function AuthReducer(state = initialState, { type }) {
  switch (type) {
    case REGISTER_SUCCESS:
      return { ...state, isLoggedIn: false }
    case REGISTER_FAIL:
      return { ...state, isLoggedIn: false }
    case LOGIN_SUCCESS:
      return { ...state, isLoggedIn: true }
    case LOGIN_FAIL:
      return { ...state, isLoggedIn: false }
    case LOGOUT:
      return { ...state, isLoggedIn: false }
    default:
      return state
  }
}

export default AuthReducer
