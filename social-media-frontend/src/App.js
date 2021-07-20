import { useState } from "react"
import { BrowserRouter as Router, Switch } from "react-router-dom"
import { PublicRoute, PrivateRoute } from "react-private-public-route"

import "./pages/css/user_form.css"
import "./App.css"

// COMPONENTS
import Navbar from "./components/Navbar.js"

// PAGES
import Login from "./pages/Login.js"
import Home from "./pages/Home.js"
import Signup from "./pages/Signup.js"

function App() {
  const [isLoggedIn, setIsLoggedIn] = useState(false)

  return (
    <Router>
      <div className="App">
        <Navbar />
        <Switch>
          <PublicRoute
            path="/login"
            component={() => <Login setIsLoggedIn={setIsLoggedIn} isLogged={isLoggedIn} />}
          />
          <PublicRoute path="/signup" component={Signup} />
          <PrivateRoute
            exact
            path="/"
            isAuthenticated={isLoggedIn}
            redirect="/login"
            component={Home}
          />
        </Switch>
      </div>
    </Router>
  )
}
export default App
