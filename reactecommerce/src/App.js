import React from "react";
import { BrowserRouter as Router , Routes, Route} from 'react-router-dom';
import MasterLayout from "./layouts/admin/Master.layout";
import Home from './components/frontend/Home'
import Login from "./components/frontend/auth/Login";
import Register from "./components/frontend/auth/Register";

function App() {
  return (
    <div className="App">
      <Router>
        <Routes>
        <Route exact path="/" element={<Home/>} />

        <Route path="/login" element={<Login/>} />
        <Route path="/register" element={<Register/>} />

        <Route path="/admin/*" element={<MasterLayout />} />  
        </Routes>
      </Router>
    </div>
  );
}

export default App;
