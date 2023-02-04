import React, { useState, handleChange } from 'react';

const activites = ["Sleep", "School", "Work", "Homework", "Hangingout", "Cooking"];
const time_remaining = 168;
function Form() {
    const [formData] = useState({});
  
    const handleSubmit = event => {
      event.preventDefault();
      // Submit formData to a SQL database
    };
    for (let i = 0; i < activites.length; i++) {
        }
    return (
      <form onSubmit={handleSubmit} style={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
      {activites.map((string, index) => (
        <Inputbox activity = {string} />
        ))}
        <div  style={{ width: '100%', display: 'flex', flexDirection: 'row', margin: '10px', padding: "10px", justifyContent: "space-between" }}>
            <p style={{ fontWeight: 'bold', marginRight: '0px',}}>Time Remaining:</p>
            <p style={{ fontWeight: 'bold', padding: '10px',}}>{time_remaining}</p>
        </div>
        <button type="submit" style={{ width: '40%', padding: '10px', fontSize: '16px', marginTop: '10px', backgroundColor:'rgb(28, 150, 193)'}}>Submit
        </button>
      </form>
    );
  }


  function Inputbox({activity}) {
    const handleChange = event => {

      };

    return(
        <div>
            <div style={{ width: '100%', display: 'flex', flexDirection: 'row', margin: '10px', padding: "10px", justifyContent: "space-between" }}>
            <label htmlFor="field1" style={{ fontWeight: 'bold', marginRight: '0px', }}>{activity}</label>
            <input
                type="text"
                name="field1"
                id="field1"
                placeholder='hrs'
                style={{ width: '15%', padding: '10px', fontSize: '16px'}}
                onChange={handleChange}
            />
            </div>
        </div>
    )
  }
  export default Form;