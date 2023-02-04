import logo from './logo.svg';
import './App.css';
import React, { useState } from 'react';


function Form() {
  const [formData, setFormData] = useState({});

  const handleChange = event => {
    setFormData({ ...formData, [event.target.name]: event.target.value });
  };

  const handleSubmit = event => {
    event.preventDefault();
    // Submit formData to a SQL database
  };

  return (
    <form onSubmit={handleSubmit} style={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      <div style={{ width: '30%', display: 'flex', flexDirection: 'row', margin: '10px' }}>
        
        <label htmlFor="field1" style={{ fontWeight: 'bold', marginRight: '10px' }}>Field 1:</label>
        <input
          type="text"
          name="field1"
          id="field1"
          style={{ width: '100%', padding: '10px', fontSize: '16px' }}
          onChange={handleChange}
        />
        <p style={{ fontSize: '12px', color: 'lightgray' }}>hrs</p>
      </div>
      <div style={{ width: '30%', display: 'flex', flexDirection: 'row', margin: '20px' }}>
        <label htmlFor="field2" style={{ fontWeight: 'bold', marginRight: '10px' }}>Field 2:</label>
        <input
          type="text"
          name="field2"
          id="field2"
          style={{ width: '40px', padding: '10px', fontSize: '16px' }}
          onChange={handleChange}
        />
        <p style={{ fontSize: '12px', color: 'lightgray' }}>hrs</p>
      </div>
      <button type="submit" style={{ width: '30%', padding: '10px', fontSize: '16px', marginTop: '10px' }}>
        Submit
      </button>
    </form>
  );
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
      <a href="#about">About</a>
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
      <Form labels={labels} />
      </div>
      <h1>Welcome to my website!</h1>
      <p>Here's some information about my website.</p>
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


const Footer = () => {
  return (
    <footer>
      <p>Copyright © 2021 My Website</p>
    </footer>
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

