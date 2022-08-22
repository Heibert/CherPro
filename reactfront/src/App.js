import './App.css';

import	{BrowserRouter, Routes, Route} from 'react-router-dom'

import Lista from './components/Lista';

function App() {
  return (
    <div className="App">
      <button className='btn btn-primary'>crear</button>
        <BrowserRouter>
          <Routes>
            <Route path='/' element={<Lista/>}></Route>
          </Routes>
        </BrowserRouter>
    </div>
  );
}

export default App;
