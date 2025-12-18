
import React from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import ValueProp from './components/ValueProp';
import Benefits from './components/Benefits';
import HowItWorks from './components/HowItWorks';
import AICardRecommender from './components/AICardRecommender';
import Features from './components/Features';
import Testimonials from './components/Testimonials';
import FinalCTA from './components/FinalCTA';
import Footer from './components/Footer';

const App: React.FC = () => {
  return (
    <div className="min-h-screen flex flex-col selection:bg-lime-300">
      <Navbar />
      <main className="flex-grow">
        <Hero />
        <ValueProp />
        <Benefits />
        <HowItWorks />
        <AICardRecommender />
        <Features />
        <Testimonials />
        <FinalCTA />
      </main>
      <Footer />
    </div>
  );
};

export default App;
