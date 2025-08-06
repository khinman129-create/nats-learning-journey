import { Button } from "@/components/ui/button";
import { Star, Award, Users, Calendar } from "lucide-react";
import heroImage from "@/assets/hero-education.jpg";

const HeroSection = () => {
  return (
    <section className="relative bg-gradient-section min-h-screen flex items-center overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-5">
        <div className="absolute inset-0" style={{
          backgroundImage: `url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23000' fill-opacity='0.1'%3E%3Ccircle cx='7' cy='7' r='1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")`
        }}></div>
      </div>

      <div className="container mx-auto px-4 py-20">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Hero Content */}
          <div className="space-y-8">
            {/* Trust Indicators */}
            <div className="flex items-center space-x-4 text-sm">
              <div className="flex items-center space-x-1 bg-accent-light px-3 py-1 rounded-full">
                <Star className="h-4 w-4 text-accent" />
                <span className="text-accent-foreground font-medium">香港頂尖升學</span>
              </div>
              <div className="flex items-center space-x-1 bg-primary-light px-3 py-1 rounded-full">
                <Award className="h-4 w-4 text-primary" />
                <span className="text-primary-foreground font-medium">13間名校錄取</span>
              </div>
            </div>

            {/* Main Headline */}
            <div className="space-y-4">
              <h1 className="text-4xl lg:text-6xl font-bold text-foreground leading-tight">
                不只是面試預備
                <span className="block text-primary">更是升學夥伴</span>
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                智叻教育中心運用獨家「360°全人發展系統」，結合「升學鐵三角」皇牌導師團隊，
                <span className="text-accent font-semibold">將家長的焦慮轉化為信心，將孩子的潛能轉化為實力</span>
              </p>
            </div>

            {/* Key Stats */}
            <div className="grid grid-cols-3 gap-6">
              <div className="text-center">
                <div className="text-3xl font-bold text-primary">360°</div>
                <div className="text-sm text-muted-foreground">全人發展</div>
              </div>
              <div className="text-center">
                <div className="text-3xl font-bold text-secondary">2:6</div>
                <div className="text-sm text-muted-foreground">師生比例</div>
              </div>
              <div className="text-center">
                <div className="text-3xl font-bold text-accent">1.5年</div>
                <div className="text-sm text-muted-foreground">長期培育</div>
              </div>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <Button variant="hero" size="lg" className="flex items-center space-x-2">
                <Calendar className="h-5 w-5" />
                <span>立即預約諮詢</span>
              </Button>
              <Button variant="outline" size="lg" className="flex items-center space-x-2">
                <Users className="h-5 w-5" />
                <span>了解課程詳情</span>
              </Button>
            </div>

            {/* Social Proof */}
            <div className="pt-8 border-t border-border">
              <p className="text-sm text-muted-foreground mb-3">獲得家長一致好評</p>
              <div className="flex items-center space-x-1">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} className="h-5 w-5 fill-secondary text-secondary" />
                ))}
                <span className="ml-2 text-sm font-medium">4.9/5.0 家長評分</span>
              </div>
            </div>
          </div>

          {/* Hero Image */}
          <div className="relative">
            <div className="bg-gradient-card rounded-2xl p-6 shadow-strong">
              <img 
                src={heroImage} 
                alt="Nat's Learning Education - 專業教育環境" 
                className="w-full rounded-xl shadow-medium"
              />
              
              {/* Floating Stats */}
              <div className="absolute -top-4 -right-4 bg-background rounded-lg shadow-medium p-4 border border-border">
                <div className="text-center">
                  <div className="text-2xl font-bold text-primary">100%</div>
                  <div className="text-xs text-muted-foreground">成功升學率</div>
                </div>
              </div>
              
              <div className="absolute -bottom-4 -left-4 bg-background rounded-lg shadow-medium p-4 border border-border">
                <div className="text-center">
                  <div className="text-2xl font-bold text-secondary">13+</div>
                  <div className="text-xs text-muted-foreground">頂尖學校</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;