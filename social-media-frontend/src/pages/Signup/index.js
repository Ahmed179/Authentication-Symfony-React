import React, { useState, useRef } from "react"
import { useDispatch, useSelector } from "react-redux"

import Form from "react-validation/build/form"
import Input from "react-validation/build/input"
import CheckButton from "react-validation/build/button"

import { signup } from "actions/auth"
import { Link, useHistory } from "react-router-dom"

const required = value => {
  if (!value) {
    return (
      <div className="alert alert-danger" role="alert">
        This field is required!
      </div>
    )
  }
}

const vusername = value => {
  if (value.length < 3 || value.length > 20) {
    return (
      <div className="alert alert-danger" role="alert">
        The username must be between 3 and 20 characters.
      </div>
    )
  }
}

const vpassword = value => {
  if (value.length < 6 || value.length > 40) {
    return (
      <div className="alert alert-danger" role="alert">
        The password must be between 6 and 40 characters.
      </div>
    )
  }
}

const Signup = () => {
  const form = useRef()
  const checkBtn = useRef()
  const history = useHistory()

  const [username, setUsername] = useState("")
  const [password, setPassword] = useState("")

  const { message } = useSelector(state => state.message)
  const dispatch = useDispatch()

  const onChangeUsername = e => {
    const username = e.target.value
    setUsername(username)
  }

  const onChangePassword = e => {
    const password = e.target.value
    setPassword(password)
  }

  const handleSignup = e => {
    e.preventDefault()

    form.current.validateAll()

    if (checkBtn.current.context._errors.length === 0) {
      dispatch(signup(username, password)).then(() => {
        history.push("/login")
      })
    }
  }

  return (
    <div className="col-md-12">
    
      <div className="card card-container">
        {message && (
            <div className="form-group">
              <div className="alert alert-danger" role="alert">
                {message}
              </div>
            </div>
          )}

        <Form onSubmit={handleSignup} ref={form}>
          <div>
            <div className="form-group">
              <label htmlFor="username">Username</label>
              <Input
                type="text"
                className="form-control"
                name="username"
                value={username}
                onChange={onChangeUsername}
                validations={[required, vusername]}
              />
            </div>

            <div className="form-group">
              <label htmlFor="password">Password</label>
              <Input
                type="password"
                className="form-control"
                name="password"
                value={password}
                onChange={onChangePassword}
                validations={[required, vpassword]}
              />
            </div>

            <div className="form-group">
              <button className="w-100 btn btn-lg submit-button btn-primary btn-block">Sign Up</button>
            </div>
          </div>
          
          <CheckButton style={{ display: "none" }} ref={checkBtn} />
          <div className="centered">
            already have an account?
            <Link to="/login" className="auth-link">
              Login
            </Link>
          </div>
        </Form>
      </div>
    </div>
  )
}

export default Signup
