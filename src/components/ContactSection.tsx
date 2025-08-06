import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { 
  MapPin, 
  Phone, 
  MessageCircle, 
  Clock, 
  Mail,
  Navigation,
  Star,
  Calendar,
  Users,
  CheckCircle
} from "lucide-react";

const ContactSection = () => {
  const locations = [
    {
      name: "葵涌校",
      address: "大連排道35-41號金基工業大廈",
      district: "葵涌區",
      features: ["寬敞教室", "多媒體設備", "圖書角落", "家長休息區"],
      hours: "週一至週日 9:00-19:00",
      nearbyLandmarks: ["葵芳地鐵站", "新都會廣場", "葵涌運動場"]
    },
    {
      name: "灣仔校",
      address: "駱克道53-55號恒澤商業大廈", 
      district: "灣仔區",
      features: ["核心地段", "交通便利", "停車方便", "現代設施"],
      hours: "週一至週日 9:00-19:00",
      nearbyLandmarks: ["灣仔地鐵站", "時代廣場", "會展中心"]
    }
  ];

  const contactMethods = [
    {
      icon: <Phone className="h-6 w-6" />,
      title: "電話諮詢",
      value: "立即致電查詢",
      description: "專業升學顧問為您即時解答",
      action: "立即致電",
      color: "text-primary"
    },
    {
      icon: <MessageCircle className="h-6 w-6" />,
      title: "WhatsApp諮詢", 
      value: "即時對話",
      description: "快速回覆，隨時為您解疑",
      action: "開始對話",
      color: "text-accent"
    },
    {
      icon: <Mail className="h-6 w-6" />,
      title: "電郵查詢",
      value: "詳細諮詢",
      description: "發送詳細資料，專人跟進",
      action: "發送郵件", 
      color: "text-secondary"
    }
  ];

  const consultationProcess = [
    {
      step: "1",
      title: "聯絡我們",
      description: "透過電話、WhatsApp或電郵與我們聯絡"
    },
    {
      step: "2", 
      title: "預約時間",
      description: "安排適合您的時間進行免費諮詢"
    },
    {
      step: "3",
      title: "專業評估",
      description: "了解孩子現況，制定個人化升學方案"
    },
    {
      step: "4",
      title: "開始課程",
      description: "正式展開孩子的升學準備之旅"
    }
  ];

  return (
    <section id="contact" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <Badge variant="secondary" className="mb-4">
            <Navigation className="h-4 w-4 mr-2" />
            聯絡我們
          </Badge>
          <h2 className="text-4xl font-bold text-foreground mb-6">
            立即開始您的升學諮詢
          </h2>
          <p className="text-xl text-muted-foreground">
            我們的專業團隊隨時準備為您和孩子提供最優質的升學指導服務
          </p>
        </div>

        {/* Contact Methods */}
        <div className="grid md:grid-cols-3 gap-6 mb-16">
          {contactMethods.map((method, index) => (
            <Card key={index} className="border-none shadow-soft hover:shadow-medium transition-all duration-300 group cursor-pointer">
              <CardHeader className="text-center pb-4">
                <div className={`mx-auto mb-4 w-16 h-16 rounded-full bg-gradient-hero flex items-center justify-center ${method.color} group-hover:scale-110 transition-transform duration-300`}>
                  <div className="text-primary-foreground">
                    {method.icon}
                  </div>
                </div>
                <CardTitle className="text-xl font-bold text-foreground">
                  {method.title}
                </CardTitle>
                <p className="text-primary font-semibold">{method.value}</p>
              </CardHeader>
              <CardContent className="text-center">
                <p className="text-muted-foreground mb-4">{method.description}</p>
                <Button variant="outline" className="w-full group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                  {method.action}
                </Button>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Locations */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold text-center text-foreground mb-8">
            教學中心位置
          </h3>
          <div className="grid lg:grid-cols-2 gap-8">
            {locations.map((location, index) => (
              <Card key={index} className="border-none shadow-soft overflow-hidden">
                <CardHeader className="bg-gradient-card">
                  <div className="flex items-center justify-between">
                    <CardTitle className="text-xl font-bold text-foreground">
                      {location.name}
                    </CardTitle>
                    <Badge variant="secondary">{location.district}</Badge>
                  </div>
                  <div className="flex items-start space-x-2 mt-2">
                    <MapPin className="h-5 w-5 text-primary mt-1 flex-shrink-0" />
                    <p className="text-muted-foreground">{location.address}</p>
                  </div>
                </CardHeader>
                <CardContent className="p-6 space-y-6">
                  {/* Operating Hours */}
                  <div className="flex items-center space-x-3">
                    <Clock className="h-5 w-5 text-accent" />
                    <div>
                      <p className="font-medium text-foreground">營業時間</p>
                      <p className="text-sm text-muted-foreground">{location.hours}</p>
                    </div>
                  </div>

                  {/* Features */}
                  <div>
                    <p className="font-medium text-foreground mb-3">中心設施</p>
                    <div className="grid grid-cols-2 gap-2">
                      {location.features.map((feature, idx) => (
                        <div key={idx} className="flex items-center space-x-2">
                          <CheckCircle className="h-4 w-4 text-accent" />
                          <span className="text-sm text-muted-foreground">{feature}</span>
                        </div>
                      ))}
                    </div>
                  </div>

                  {/* Nearby Landmarks */}
                  <div>
                    <p className="font-medium text-foreground mb-3">附近地標</p>
                    <div className="flex flex-wrap gap-2">
                      {location.nearbyLandmarks.map((landmark, idx) => (
                        <Badge key={idx} variant="outline" className="text-xs">
                          {landmark}
                        </Badge>
                      ))}
                    </div>
                  </div>

                  <Button variant="outline" className="w-full">
                    <Navigation className="h-4 w-4 mr-2" />
                    查看地圖位置
                  </Button>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>

        {/* Consultation Process */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold text-center text-foreground mb-8">
            免費諮詢流程
          </h3>
          <div className="grid md:grid-cols-4 gap-6">
            {consultationProcess.map((step, index) => (
              <div key={index} className="text-center">
                <div className="relative mx-auto mb-4">
                  <div className="w-16 h-16 bg-gradient-hero rounded-full flex items-center justify-center text-primary-foreground font-bold text-xl shadow-soft">
                    {step.step}
                  </div>
                  {index < consultationProcess.length - 1 && (
                    <div className="hidden md:block absolute top-8 left-16 w-full h-0.5 bg-border"></div>
                  )}
                </div>
                <h4 className="font-bold text-foreground mb-2">{step.title}</h4>
                <p className="text-sm text-muted-foreground">{step.description}</p>
              </div>
            ))}
          </div>
        </div>

        {/* Final CTA */}
        <div className="text-center">
          <Card className="max-w-4xl mx-auto border-none shadow-strong bg-gradient-hero text-primary-foreground">
            <CardContent className="p-12">
              <div className="flex justify-center mb-6">
                <div className="bg-primary-foreground rounded-full p-4">
                  <Star className="h-8 w-8 text-primary" />
                </div>
              </div>
              <h3 className="text-3xl font-bold mb-4">
                準備好開始這段升學之旅了嗎？
              </h3>
              <p className="text-xl mb-8 opacity-90">
                讓智叻教育成為您最信賴的升學夥伴，一起為孩子創造美好的未來
              </p>
              <div className="grid md:grid-cols-3 gap-6 mb-8">
                <div className="text-center">
                  <Calendar className="h-8 w-8 mx-auto mb-2 opacity-80" />
                  <p className="font-semibold">免費諮詢</p>
                  <p className="text-sm opacity-75">一對一專業評估</p>
                </div>
                <div className="text-center">
                  <Users className="h-8 w-8 mx-auto mb-2 opacity-80" />
                  <p className="font-semibold">專業團隊</p>
                  <p className="text-sm opacity-75">升學鐵三角導師</p>
                </div>
                <div className="text-center">
                  <CheckCircle className="h-8 w-8 mx-auto mb-2 opacity-80" />
                  <p className="font-semibold">成功保證</p>
                  <p className="text-sm opacity-75">100%升學成功率</p>
                </div>
              </div>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button variant="secondary" size="lg" className="px-8">
                  <Phone className="h-5 w-5 mr-2" />
                  立即致電諮詢
                </Button>
                <Button variant="outline" size="lg" className="bg-primary-foreground text-primary hover:bg-primary-foreground/90 px-8">
                  <MessageCircle className="h-5 w-5 mr-2" />
                  WhatsApp查詢
                </Button>
              </div>
              <p className="text-sm opacity-75 mt-6">
                💡 免費諮詢 | 🚀 即時回覆 | 🎯 度身訂造升學方案
              </p>
            </CardContent>
          </Card>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;