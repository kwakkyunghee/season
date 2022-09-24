import Navbar from "./Navbar"
import MAIN from "./pages/main"
import HOME from "./pages/home"
import VIEW from "./pages/view"
import LOGIN from "./pages/login"
import SIGNUP from "./pages/signup"

function App() {
  let Component
  switch (window.location.pathname){
    case "/":
      Component = <MAIN/>
      break
    case "/home":
      Component = <HOME/>
      break
    case "/view":
      Component = <VIEW/>
      break
    case "/login":
      Component = <LOGIN/>
      break
    case "/signup":
      Component = <SIGNUP/>
      break
  }
  return (
    <>
      <Navbar />
      <Component />
    </>
  )
}

export default App