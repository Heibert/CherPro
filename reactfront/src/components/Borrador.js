import React, { useState, useEffect } from 'react';

function Borrador() {
const [count, setCount] = useState(0);

  // De forma similar a componentDidMount y componentDidUpdate
useEffect(() => {
    // Actualiza el título del documento usando la API del navegador
    document.title = `You clicked ${count} times`;
    });

    return (
    <div>
    <p className='lol'>You clicked {count} times</p>
    <button onClick={() => setCount(count + 1)}>
        Click me
    </button>
    </div>
    );
}
export default Borrador