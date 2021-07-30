import { combineReducers } from "redux"
import auth from "./auth"
import message from "./message"
import post from "./post"

export default combineReducers({
  auth,
  message,
  post
})
