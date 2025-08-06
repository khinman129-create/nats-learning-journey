import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Menu, X, Phone, MapPin } from "lucide-react";

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <header className="bg-background/95 backdrop-blur-sm border-b border-border sticky top-0 z-50">
      <div className="container mx-auto px-4 py-4">
        <div className="flex items-center justify-between">
          {/* Logo */}
          <div className="flex items-center space-x-2">
            <div className="bg-gradient-hero rounded-lg p-2">
              <span className="text-primary-foreground font-bold text-xl">智</span>
            </div>
            <div>
              <h1 className="text-xl font-bold text-foreground">Nat's Learning</h1>
              <p className="text-sm text-muted-foreground">智叻教育中心</p>
            </div>
          </div>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center space-x-8">
            <a href="#about" className="text-foreground hover:text-primary transition-colors">關於我們</a>
            <a href="#advantages" className="text-foreground hover:text-primary transition-colors">獨特優勢</a>
            <a href="#courses" className="text-foreground hover:text-primary transition-colors">課程內容</a>
            <a href="#success" className="text-foreground hover:text-primary transition-colors">成功實證</a>
            <a href="#contact" className="text-foreground hover:text-primary transition-colors">聯絡我們</a>
          </nav>

          {/* Contact Info & CTA */}
          <div className="hidden lg:flex items-center space-x-4">
            <div className="flex items-center space-x-2 text-sm text-muted-foreground">
              <Phone className="h-4 w-4" />
              <span>立即查詢</span>
            </div>
            <Button variant="cta" size="sm">
              免費諮詢
            </Button>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            {isMenuOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden mt-4 py-4 border-t border-border">
            <nav className="flex flex-col space-y-4">
              <a href="#about" className="text-foreground hover:text-primary transition-colors">關於我們</a>
              <a href="#advantages" className="text-foreground hover:text-primary transition-colors">獨特優勢</a>
              <a href="#courses" className="text-foreground hover:text-primary transition-colors">課程內容</a>
              <a href="#success" className="text-foreground hover:text-primary transition-colors">成功實證</a>
              <a href="#contact" className="text-foreground hover:text-primary transition-colors">聯絡我們</a>
              <Button variant="cta" className="mt-4">
                免費諮詢
              </Button>
            </nav>
          </div>
        )}
      </div>
    </header>
  );
};

export default Header;