import Navbar from "components/Navbar"

function Home() {
  return (
    <div className="App">
      <Navbar />
      <main className="container">
        <div className="bg-light p-5 rounded">
          <h1>Home</h1>
          <p className="lead">
            This example is a quick exercise to illustrate how the top-aligned navbar works. As you
            scroll, this navbar remains in its original position and moves with the rest of the
            page.
          </p>
        </div>
      </main>
    </div>
  )
}
export default Home
