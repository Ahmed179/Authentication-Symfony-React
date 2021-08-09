import {
  REGISTER_SUCCESS,
  REGISTER_FAIL,
  LOGIN_SUCCESS,
  LOGIN_FAIL,
  LOGOUT,
  SET_MESSAGE
} from "./types"
import * as AuthService from "services/auth.service"

export const signup = (username, password) => dispatch => {
  return new Promise((resolve, reject) => {
    AuthService.signup(username, password)
      .then(response => {
        dispatch({ type: REGISTER_SUCCESS })
        dispatch({ type: SET_MESSAGE })
        return resolve()
      })
      .catch(error => {
        dispatch({ type: REGISTER_FAIL })
        dispatch({ type: SET_MESSAGE, payload: error.response.data })
        return reject(error)
      })
  })
}

export const login = (username, password) => dispatch => {
  return new Promise((resolve, reject) => {
    AuthService.login(username, password)
      .then(() => {
        dispatch({ type: LOGIN_SUCCESS })
        return resolve()
      })
      .catch(error => {
        dispatch({ type: LOGIN_FAIL })
        return reject(error)
      })
  })
}

export const logout = () => dispatch => {
  AuthService.logout()
  dispatch({ type: LOGOUT })
}
