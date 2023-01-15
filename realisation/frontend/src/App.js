import './App.css';
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Sidebar from './components/Sidebar';
import { SidebarData } from './components/SidebarData';
import Topbar from './components/Topbar';

function App() {
  return (
    <div className="App">
      <Topbar />
      <div className='menuANDpages'>
        <BrowserRouter>
          <Sidebar />
          <Routes>
            {
              SidebarData.map((item) => {
                return <Route path={item.link} element={item.component}></Route>
              })
            }
          </Routes>
        </BrowserRouter>
      </div>

    </div>
  );
}

export default App;
