import './App.css';

import	{BrowserRouter, Routes, Route} from 'react-router-dom'

import Lista from './components/Lista';
import CreateAsistencia from './components/CreateAsistencia';

function App() {
  return (
    <div className="App">
        <BrowserRouter>
          <Routes>
            <Route path='/' element={<Lista/>}/>
            <Route path='/create' element={<CreateAsistencia/>}/>
          </Routes>
        </BrowserRouter>
    </div>
  );
}

export default App;
