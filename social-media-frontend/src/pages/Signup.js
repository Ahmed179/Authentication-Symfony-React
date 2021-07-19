import { useState } from "react"
import { useHistory } from "react-router-dom"
import axios from "axios"

function Signup() {
  const history = useHistory()
  const [username, setUsername] = useState("")
  const [password, setPassword] = useState("")
  const [error, setError] = useState("")

  function handleSubmit() {
    axios({
      method: "post",
      headers: { "Content-Type": "application/json" },
      url: "https://localhost:8000/api/user/signup",
      data: { username, password },
    })
      .then(() => {
        history.push("/login")
      })
      .catch(err => {
        setError(err.response.data)
      })
  }

  return (
    <main className="form-signin">
      {error && <div className="alert alert-danger">{error}</div>}
      <h3 className="h3 mb-3 fw-bold"> Sign up</h3>

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
      <button className="w-100 btn btn-lg btn-primary" onClick={handleSubmit}>
        Sign in
      </button>
    </main>
  )
}
export default Signup
