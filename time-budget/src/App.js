import logo from './logo.svg';
import './App.css';
import React, { useState } from 'react';


const Form = ({ labels }) => {
  const [formData, setFormData] = useState({});

  const handleChange = (event) => {
    setFormData({
      ...formData,
      [event.target.name]: event.target.value
    });
  }
  
//   return (
//     <div style={{ padding: '20px', backgroundColor: 'white', borderRadius: '10px' }}>
//       {labels.map((label, index) => (
//         <div key={index} style={{ margin: '10px 0' }}>
//           <label htmlFor={label} style={{ marginRight: '10px' }}>{label}</label>
//           <input type="text" id={label} style={{ width: '200px', padding: '10px' }} placeholder="hrs" />
//         </div>
//       ))}
//     </div>
//   );
// }
return (
  <div style={{ padding: '20px', backgroundColor: 'white', borderRadius: '10px' }}>
    {labels.map((label) => (
      <div style={{ display: 'flex', alignItems: 'center' }}>
        <label htmlFor={label} style={{ width: '30%' }}>{label}</label>
        <input
          style={{ width: '70%' }}
          type="text"
          id={label}
          name={label}
          onChange={handleChange}
          value={formData[label] || ''}
        />
      </div>
    ))}
  </div>
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
      <button>Time Statitsics</button>
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

