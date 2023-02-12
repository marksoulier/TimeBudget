import React from 'react';

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

export default BarGraph;