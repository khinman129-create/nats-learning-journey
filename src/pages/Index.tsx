import Header from "@/components/Header";
import HeroSection from "@/components/HeroSection";
import AdvantagesSection from "@/components/AdvantagesSection";
import CourseSection from "@/components/CourseSection";
import SuccessSection from "@/components/SuccessSection";
import ContactSection from "@/components/ContactSection";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen">
      <Header />
      <HeroSection />
      <AdvantagesSection />
      <CourseSection />
      <SuccessSection />
      <ContactSection />
      <Footer />
    </div>
  );
};

export default Index;
