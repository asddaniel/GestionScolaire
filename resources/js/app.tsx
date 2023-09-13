import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import React from 'react'
import { createRoot } from 'react-dom/client';
import NavBar from './layouts/NavBar'
import { Sidebar } from './layouts/Sidebar';
import Home from './Pages/Home';
import { configureStore } from '@reduxjs/toolkit'
import { DataSlice } from './utils/Store';
import { Provider } from 'react-redux'

const store  = configureStore({
    reducer: { data: DataSlice.reducer }
})

if(document.getElementById("root")){

    createRoot(document.getElementById("root")).render(<React.StrictMode>
        <Router>
            <Provider store={store}>
                <div className="lg:grid md:grid lg:grid-cols-5 md:grid-cols-2 bg-slate-200">
                        <Sidebar />
                        <div className="flex flex-col mx-0 col-span-4 px-0 overflow-hidden">
                        <NavBar></NavBar>
                        <Routes>
                            <Route path="/" element={<Home />} />
                        </Routes>
                        </div>
                </div>
            </Provider>



        </Router>
    </React.StrictMode>)


}
