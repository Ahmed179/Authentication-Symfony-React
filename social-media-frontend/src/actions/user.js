import * as UserService from "services/user.service"
import { SET_USERS } from "./types"

export const getUsers = () => dispatch => {
  return new Promise((resolve, reject) =>
    UserService.getUsers().then(response => {
      dispatch({ type: SET_USERS, payload: response.data })
      return resolve()
    })
  )
}
