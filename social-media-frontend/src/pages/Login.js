import { useState } from "react"
import { useHistory } from "react-router-dom"
import axios from "axios"

function Login({ setIsLoggedIn }) {
  const history = useHistory()
  const [username, setUsername] = useState("")
  const [password, setPassword] = useState("")
  const [error, setError] = useState("")

  function handleSubmit() {
    axios({
      method: "post",
      headers: { "Content-Type": "application/json" },
      url: "https://localhost:8000/api/user/login",
      data: { username, password },
    })
      .then(res => {
        localStorage.setItem("token", res.data)
        setIsLoggedIn(true)
        history.push("/")
      })
      .catch(err => {
        setError(err.response.data)
      })
  }

  return (
    <main className="form-signin">
      {error && <div className="alert alert-danger">{error}</div>}
      <h3 className="h3 mb-3 fw-bold"> Log in</h3>

      <input
        type="text"
        className="form-control"
        placeholder="Username"
        value={username}
        onChange={e => setUsername(e.target.value)}
      />
      <input
        type="password"
        className="form-control"
        placeholder="Password"
        value={password}
        onChange={e => setPassword(e.target.value)}
      />
      <button className="w-100 btn btn-lg btn-primary" onClick={handleSubmit} disabled={!username}>
        Sign in
      </button>
    </main>
  )
}

export default Login
