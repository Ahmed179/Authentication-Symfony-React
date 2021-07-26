import { BrowserRouter as Router, Switch } from "react-router-dom"
import { PublicRoute, PrivateRoute } from "react-private-public-route"
import { useSelector } from "react-redux"

// PAGES
import Login from "./pages/Login"
import Home from "./pages/Home"
import Signup from "./pages/Signup"

function App() {
  const { isLoggedIn } = useSelector(state => state.auth)

  return (
    <Router>
      <div className="App">
        <Switch>
          <PublicRoute path="/login" component={Login} />
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
