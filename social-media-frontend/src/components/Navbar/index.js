import { NavLink } from "react-router-dom"
import HomeIcon from "@material-ui/icons/Home"
import { useHistory } from "react-router-dom"
import "./style.css"
// import FeaturedPlayListOutlinedIcon from "@material-ui/icons/FeaturedPlayListOutlined"
// import AssignmentTurnedInOutlinedIcon from "@material-ui/icons/AssignmentTurnedInOutlined"
// import PeopleAltOutlinedIcon from "@material-ui/icons/PeopleAltOutlined"
// import NotificationsOutlinedIcon from "@material-ui/icons/NotificationsOutlined"
// import SearchIcon from "@material-ui/icons/Search"
// import Avatar from "@material-ui/core/Avatar"
// import LanguageIcon from "@material-ui/icons/Language"

function Navbar() {
  const history = useHistory()

  const logout = () => {
    localStorage.removeItem("token")
    history.push("/login")
  }

  return (
    <nav className="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div className="container-fluid">
        <NavLink className="navbar-brand" to="/">
          <HomeIcon />
        </NavLink>
        {/* <NavLink className="navbar-brand" to="/">
          <FeaturedPlayListOutlinedIcon />
        </NavLink>
        <NavLink className="navbar-brand" to="/">
          <AssignmentTurnedInOutlinedIcon />
        </NavLink>
        <NavLink className="navbar-brand" to="/">
          <PeopleAltOutlinedIcon />
        </NavLink>
        <NavLink className="navbar-brand" to="/">
          <NotificationsOutlinedIcon />
        </NavLink>
        <div className="search_input">
          <SearchIcon />
          <input type="text" placeholder="Search Quora" />
        </div>
        <div className="avatar_items">
          <div className="avatar_item">
            <Avatar />
          </div>
          <LanguageIcon />
        </div> */}

        <div>
          <ul className="navbar-nav me-auto mb-2 mb-md-0">
            <li className="nav-item">
              <div className="nav-link logout-btn" onClick={logout}>
                Logout
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  )
}

export default Navbar
