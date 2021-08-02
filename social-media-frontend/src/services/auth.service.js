import axios from "axios"

const API_URL = "https://localhost:8000/api/user/"

export async function signup(username, password) {
  return await axios.post(API_URL + "signup", {
    username,
    password
  })
}

export async function login(username, password) {
  return await axios.post(API_URL + "login", {
    username,
    password
  })
}

export function logout() {
  localStorage.removeItem("token")
}
