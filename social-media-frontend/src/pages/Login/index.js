import { useState } from "react"
import { useHistory } from "react-router-dom"
import { useDispatch, useSelector } from "react-redux"
import { login } from "actions/auth"
import { Link } from "react-router-dom"
import { connect } from 'react-redux';
import { Redirect } from 'react-router-dom';
import "stylesheet/form.css"
function Login() {
  const history = useHistory()
  const dispatch = useDispatch()
  const [username, setUsername] = useState("ahmed")
  const [password, setPassword] = useState("ivana")
  const [error, setError] = useState ()

  const { message } = useSelector(state => state.message)


  function handleSubmit() {
    dispatch(login(username, password))  
    .then(() => {
          history.push("/");
        })
        .catch((err) => {
          setError(err.response.data)
        });
  }

  return (
    <div className="col-md-12">
    <div className="card card-container">
    {error && <div className="alert alert-danger">{error}</div>}

      <div className="form-group">
      <label htmlFor="username">Username</label>
      <input
        type="text"
        className="form-control"
        placeholder="Username"
        value={username}
        onChange={e => setUsername(e.target.value)}
      />
      </div>
      <div className="form-group">
      <label htmlFor="password">Password</label>
      <input
        type="password"
        className="form-control"
        placeholder="Password"
        value={password}
        onChange={e => setPassword(e.target.value)}
      />
      </div>
      <button className="w-100 btn btn-lg btn-primary submit-button" onClick={handleSubmit} disabled={!username}>
        Log in
      </button>

      <div className="centered">
        don't have an account?
        <Link to="/signup" className="auth-link">
          Sign up
        </Link>
      </div>
    </div>
    </div>
  )
}

export default Login
