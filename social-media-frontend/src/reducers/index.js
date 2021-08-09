import { combineReducers } from "redux"
import auth from "./auth"
import message from "./message"
import posts from "./post"

export default combineReducers({
  auth,
  message,
  posts
})
