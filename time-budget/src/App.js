import logo from './logo.svg';
import './App.css';
import Footer from './footer';
import Form from './Form';
import TimeManagementPage from './pages/about';
import BarGraph from './display_data';
import React, { useState } from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

const Results = ({data}) => {

}

const Navigation = () => {

  return (
    <nav>
      <a href="/" style={{ display: 'block', width: '100%', height: '150%', textDecoration: 'none', color: 'purple' }}>
        <img src="logo.png" alt="" className="logo" />
      </a>
    <div class="nav-links">
      <a href="/about">About</a>
      <a href="/feedback">Feedback</a>
      <a href="/login" >Login</a>
    </div>
    </nav>
  );
}

const Sidebar = () => {
  return (
    <div class="sidebar">
      <button>Priorities</button>
      <button>Budget</button>
      <button>Time Statitstics</button>
    </div>
  );
}

const labels = ['Name', 'Age', 'Email'];

const Main = () => {
  return (
    <main>
      <div class="center">
      <div className="white-box" style={{ width: '40%'}}>
      
      <Form />
      </div>
      <Results />
      </div>
      <Footer />
    </main>
  );
}

const Display = ({ title, data }) => {
  return (
    <div className='right-side'>
      <div className="white-box">
        <h1>{title}</h1>
        <BarGraph data={data} />
      </div>
    </div>

    // <div className="display">
    //   <h1 className="title">{title}</h1>
    //   <div className="bar-graph">
    //     {data.map((value, i) => (
    //       <div key={i} className="bar" style={{ height: `${value}%` }}></div>
    //     ))}
    //   </div>
    // </div>
  );
}

const data = [
  { name: 'Jan', value: 20 },
  { name: 'Feb', value: 25 },
  { name: 'Mar', value: 30 },
  { name: 'Apr', value: 35 },
  { name: 'May', value: 40 }
];

const MainPage = () => {
  return(
    <div class= "class1">
      <div className="container">
        <Sidebar />
        <Main />
        <Display title="Time Statistics" data={data} />
      </div>

    </div>
  )
}

function App() {
  return (
    <Router>
      <div>
        <Navigation />
        <Routes>
          <Route path="/" element={<MainPage />} />
          <Route path="/about" element={<TimeManagementPage />} />
        </Routes>
      </div>
    </Router>
  );
}
export default App;

