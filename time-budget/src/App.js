import logo from './logo.svg';
import './App.css';
import Footer from './footer';
import Form from './Form';
import React, { useState } from 'react';


const Results = ({data}) => {

}

const BarGraph = ({ data }) => {
  return (
    <div>
      <h2>Bar Graph</h2>
      {data.map(({ name, value }, i) => (
        <div key={i} style={{ display: 'flex', alignItems: 'center' }}>
          <div style={{ width: value + '%', height: '20px', background: 'blue' }} />
          <span style={{ marginLeft: '10px' }}>{name}</span>
        </div>
      ))}
    </div>
  );
};

const Navigation = () => {

  return (
    <nav>
    <img href = "#home" src = "logo.png" alt="" class="logo"></img> 
    <div class="nav-links">
      <a>About</a>
      <a href="#contact">Feedback</a>
      <a href="#contact">Login</a>
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

function App() {
  return (
    <div>
      <Navigation />
        <div class= "class1">
          <div className="container">
            <Sidebar />
            <Main />
            <Display title="Time Statistics" data={data} />
          </div>
        </div>
    </div>
  );
}
export default App;

