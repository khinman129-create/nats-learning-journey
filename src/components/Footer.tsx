import { MapPin, Phone, Mail, Clock, Facebook, Instagram } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-foreground text-background py-12">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
          {/* Company Info */}
          <div className="space-y-4">
            <div className="flex items-center space-x-2">
              <div className="bg-gradient-hero rounded-lg p-2">
                <span className="text-primary-foreground font-bold text-xl">智</span>
              </div>
              <div>
                <h3 className="text-xl font-bold">Nat's Learning</h3>
                <p className="text-sm opacity-80">智叻教育中心</p>
              </div>
            </div>
            <p className="text-sm opacity-80 leading-relaxed">
              香港頂尖升小面試準備專家，致力為每個家庭提供最專業的升學指導服務，
              讓孩子在升學路上發光發亮。
            </p>
            <div className="flex space-x-4">
              <Facebook className="h-5 w-5 opacity-60 hover:opacity-100 cursor-pointer transition-opacity" />
              <Instagram className="h-5 w-5 opacity-60 hover:opacity-100 cursor-pointer transition-opacity" />
            </div>
          </div>

          {/* Quick Links */}
          <div className="space-y-4">
            <h4 className="text-lg font-semibold">快速連結</h4>
            <nav className="space-y-2">
              <a href="#about" className="block text-sm opacity-80 hover:opacity-100 transition-opacity">關於我們</a>
              <a href="#advantages" className="block text-sm opacity-80 hover:opacity-100 transition-opacity">獨特優勢</a>
              <a href="#courses" className="block text-sm opacity-80 hover:opacity-100 transition-opacity">課程內容</a>
              <a href="#success" className="block text-sm opacity-80 hover:opacity-100 transition-opacity">成功實證</a>
              <a href="#contact" className="block text-sm opacity-80 hover:opacity-100 transition-opacity">聯絡我們</a>
            </nav>
          </div>

          {/* Contact Info */}
          <div className="space-y-4">
            <h4 className="text-lg font-semibold">聯絡資訊</h4>
            <div className="space-y-3">
              <div className="flex items-start space-x-2">
                <Phone className="h-4 w-4 mt-1 opacity-60" />
                <div>
                  <p className="text-sm font-medium">諮詢熱線</p>
                  <p className="text-sm opacity-80">立即致電查詢</p>
                </div>
              </div>
              <div className="flex items-start space-x-2">
                <Mail className="h-4 w-4 mt-1 opacity-60" />
                <div>
                  <p className="text-sm font-medium">電郵查詢</p>
                  <p className="text-sm opacity-80">info@natslearning.hk</p>
                </div>
              </div>
              <div className="flex items-start space-x-2">
                <Clock className="h-4 w-4 mt-1 opacity-60" />
                <div>
                  <p className="text-sm font-medium">服務時間</p>
                  <p className="text-sm opacity-80">週一至週日 9:00-19:00</p>
                </div>
              </div>
            </div>
          </div>

          {/* Locations */}
          <div className="space-y-4">
            <h4 className="text-lg font-semibold">教學中心</h4>
            <div className="space-y-4">
              <div>
                <div className="flex items-start space-x-2 mb-2">
                  <MapPin className="h-4 w-4 mt-1 opacity-60" />
                  <p className="text-sm font-medium">葵涌校</p>
                </div>
                <p className="text-xs opacity-80 ml-6">
                  大連排道35-41號<br />金基工業大廈
                </p>
              </div>
              <div>
                <div className="flex items-start space-x-2 mb-2">
                  <MapPin className="h-4 w-4 mt-1 opacity-60" />
                  <p className="text-sm font-medium">灣仔校</p>
                </div>
                <p className="text-xs opacity-80 ml-6">
                  駱克道53-55號<br />恒澤商業大廈
                </p>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="border-t border-background/20 mt-12 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <p className="text-sm opacity-60">
              © 2024 智叻教育中心 Nat's Learning Education. 版權所有.
            </p>
            <div className="flex space-x-6 text-sm opacity-60">
              <a href="#" className="hover:opacity-100 transition-opacity">私隱政策</a>
              <a href="#" className="hover:opacity-100 transition-opacity">使用條款</a>
              <a href="#" className="hover:opacity-100 transition-opacity">網站地圖</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;