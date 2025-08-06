import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Users, Trophy, BookOpen, Star, Heart, Zap } from "lucide-react";
import academicIcon from "@/assets/academic-icon.jpg";
import smallClassIcon from "@/assets/small-class-icon.jpg";
import holisticIcon from "@/assets/holistic-icon.jpg";

const AdvantagesSection = () => {
  const advantages = [
    {
      icon: <Trophy className="h-8 w-8 text-accent" />,
      image: academicIcon,
      title: "全港獨家「升學鐵三角」",
      subtitle: "皇牌導師團隊",
      description: "摒棄單一導師模式，匯集升學戰役中三個最關鍵的角色",
      features: [
        { role: "校內視角", name: "Ms. Chan", desc: "10年+教育經驗，深諳名校收生潛規則" },
        { role: "實戰經驗", name: "Ms. Yu", desc: "神校媽媽，兒子獲13間頂尖小學取錄" },
        { role: "英語優勢", name: "NET導師", desc: "現職私立幼稚園英語總導師" }
      ],
      highlight: "無法複製的專業壁壘"
    },
    {
      icon: <Users className="h-8 w-8 text-primary" />,
      image: smallClassIcon,
      title: "無可比擬的小班教學",
      subtitle: "黃金師生比例",
      description: "堅持2位導師對6-8名學生的小班模式",
      features: [
        { role: "個人關注", desc: "每位孩子都能得到充分的關注和引導" },
        { role: "性格適應", desc: "無論內向還是活潑，都能找到適合的學習方式" },
        { role: "即時反饋", desc: "導師能即時給予個人化的學習建議" }
      ],
      highlight: "遠超市場標準的教學質素"
    },
    {
      icon: <BookOpen className="h-8 w-8 text-secondary" />,
      image: holisticIcon,
      title: "真正的「一條龍」",
      subtitle: "全人發展模式",
      description: "不僅是面試技巧，更是綜合實力的全面提升",
      features: [
        { role: "無縫整合", desc: "學術、音藝、證書課程、面試技巧一體化" },
        { role: "高效便捷", desc: "家長無需奔波於不同中心" },
        { role: "成果導向", desc: "最終凝聚成專業精美的個人檔案Portfolio" }
      ],
      highlight: "連貫、高效、成果最大化"
    }
  ];

  return (
    <section id="advantages" className="py-20 bg-gradient-section">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <Badge variant="secondary" className="mb-4">
            <Star className="h-4 w-4 mr-2" />
            我們的獨特優勢
          </Badge>
          <h2 className="text-4xl font-bold text-foreground mb-6">
            為何選擇智叻教育？
          </h2>
          <p className="text-xl text-muted-foreground">
            三大核心優勢，打造香港最專業的升小面試準備方案
          </p>
        </div>

        {/* Advantages Grid */}
        <div className="grid lg:grid-cols-3 gap-8">
          {advantages.map((advantage, index) => (
            <Card key={index} className="bg-gradient-card border-none shadow-soft hover:shadow-medium transition-all duration-300 group">
              <CardHeader className="text-center pb-6">
                <div className="mx-auto mb-4 relative">
                  <div className="w-20 h-20 rounded-full bg-gradient-hero flex items-center justify-center mb-4 mx-auto shadow-soft group-hover:shadow-medium transition-all duration-300">
                    {advantage.icon}
                  </div>
                  <div className="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                    <img 
                      src={advantage.image} 
                      alt={advantage.title}
                      className="w-12 h-12 rounded-full shadow-soft border-2 border-background"
                    />
                  </div>
                </div>
                <CardTitle className="text-xl font-bold text-foreground mb-2">
                  {advantage.title}
                </CardTitle>
                <p className="text-primary font-semibold text-lg">{advantage.subtitle}</p>
              </CardHeader>
              
              <CardContent className="space-y-6">
                <p className="text-muted-foreground leading-relaxed">
                  {advantage.description}
                </p>

                <div className="space-y-4">
                  {advantage.features.map((feature, idx) => (
                    <div key={idx} className="flex items-start space-x-3">
                      <div className="flex-shrink-0">
                        <div className="w-2 h-2 rounded-full bg-accent mt-2"></div>
                      </div>
                      <div>
                        {feature.role && (
                          <div className="flex items-center space-x-2 mb-1">
                            <span className="font-semibold text-foreground">{feature.role}</span>
                            {feature.name && (
                              <Badge variant="outline" className="text-xs">{feature.name}</Badge>
                            )}
                          </div>
                        )}
                        <p className="text-sm text-muted-foreground">{feature.desc}</p>
                      </div>
                    </div>
                  ))}
                </div>

                <div className="pt-4 border-t border-border">
                  <div className="flex items-center space-x-2">
                    <Heart className="h-4 w-4 text-accent" />
                    <span className="text-sm font-medium text-accent">{advantage.highlight}</span>
                  </div>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Bottom CTA */}
        <div className="text-center mt-16">
          <div className="bg-background rounded-2xl p-8 shadow-medium border border-border max-w-2xl mx-auto">
            <h3 className="text-2xl font-bold text-foreground mb-4">
              準備好讓孩子體驗這些優勢了嗎？
            </h3>
            <p className="text-muted-foreground mb-6">
              立即預約免費諮詢，讓我們的專業團隊為您度身訂造升學藍圖
            </p>
            <div className="flex justify-center">
              <button className="bg-gradient-hero text-primary-foreground px-8 py-3 rounded-lg font-semibold shadow-soft hover:shadow-medium transform hover:scale-105 transition-all duration-300 flex items-center space-x-2">
                <Zap className="h-5 w-5" />
                <span>立即免費諮詢</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default AdvantagesSection;