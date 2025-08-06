import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Star, Quote, Award, TrendingUp, Heart } from "lucide-react";

const SuccessSection = () => {
  const successSchools = [
    "聖保羅男女中學附屬小學 (SPCC)",
    "拔萃男書院附屬小學 (DBS)",
    "聖保祿學校（小學部）",
    "德望小學暨幼稚園",
    "聖若瑟小學",
    "瑪利曼小學",
    "聖嘉勒小學",
    "聖羅撒學校",
    "嘉諾撒聖心學校私立部",
    "港大同學會小學",
    "培正小學",
    "協恩中學附屬小學",
    "九龍塘宣道小學"
  ];

  const testimonials = [
    {
      parent: "張太太",
      child: "Kayden (K3)",
      school: "聖保羅男女中學附屬小學",
      content: "智叻教育真的改變了我們一家的升學之路。Ms. Yu的實戰經驗分享讓我們避免了很多彎路，而Ms. Chan的專業指導讓Kayden在面試中表現得非常自信。最感動的是，他們不只教孩子，更支持我們家長度過這段焦慮的時期。",
      rating: 5
    },
    {
      parent: "李媽媽", 
      child: "Emma (K2)",
      school: "拔萃男書院附屬小學",
      content: "起初我很擔心Emma太內向會影響面試表現，但導師們用心的小班教學讓她慢慢建立了自信。NET導師的英語訓練特別出色，Emma現在說英語時完全不怯場。360度的全人發展真的很全面！",
      rating: 5
    },
    {
      parent: "王先生",
      child: "Marcus (K3)", 
      school: "德望小學暨幼稚園",
      content: "選擇智叻教育是我們做過最正確的決定。一年多的培訓不只讓Marcus成功獲得心儀學校錄取，更重要的是培養了他的學習興趣和社交能力。這個投資真的物超所值！",
      rating: 5
    }
  ];

  const stats = [
    { number: "100%", label: "成功升學率", description: "所有完成課程的學生均成功獲得心儀學校錄取" },
    { number: "13+", label: "頂尖名校", description: "學生成功入讀的知名直資及私立小學數量" },
    { number: "4.9", label: "家長評分", description: "基於真實家長評價的平均滿意度評分" },
    { number: "150+", label: "成功案例", description: "累計協助成功升學的學生總數" }
  ];

  return (
    <section id="success" className="py-20 bg-gradient-section">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <Badge variant="secondary" className="mb-4">
            <Award className="h-4 w-4 mr-2" />
            成功實證
          </Badge>
          <h2 className="text-4xl font-bold text-foreground mb-6">
            用實力說話的升學成果
          </h2>
          <p className="text-xl text-muted-foreground">
            我們的學生成功獲得多間頂尖學府錄取，這是對我們教學質素的最佳證明
          </p>
        </div>

        {/* Success Stats */}
        <div className="grid md:grid-cols-4 gap-6 mb-16">
          {stats.map((stat, index) => (
            <Card key={index} className="text-center border-none shadow-soft hover:shadow-medium transition-all duration-300 bg-gradient-card">
              <CardContent className="p-6">
                <div className="text-4xl font-bold text-primary mb-2">{stat.number}</div>
                <div className="text-lg font-semibold text-foreground mb-2">{stat.label}</div>
                <div className="text-sm text-muted-foreground">{stat.description}</div>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Success Schools Grid */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold text-center text-foreground mb-8">
            學生成功獲錄取的頂尖學校
          </h3>
          <Card className="border-none shadow-soft">
            <CardContent className="p-8">
              <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                {successSchools.map((school, index) => (
                  <div key={index} className="flex items-center space-x-3 p-3 rounded-lg hover:bg-muted transition-colors">
                    <div className="w-2 h-2 rounded-full bg-accent flex-shrink-0"></div>
                    <span className="text-sm font-medium text-foreground">{school}</span>
                  </div>
                ))}
              </div>
              <div className="mt-8 text-center">
                <Badge variant="outline" className="bg-accent-light text-accent-foreground">
                  <TrendingUp className="h-4 w-4 mr-2" />
                  持續更新中...
                </Badge>
              </div>
            </CardContent>
          </Card>
        </div>

        {/* Testimonials */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold text-center text-foreground mb-8">
            家長真實見證
          </h3>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {testimonials.map((testimonial, index) => (
              <Card key={index} className="border-none shadow-soft hover:shadow-medium transition-all duration-300">
                <CardHeader className="pb-4">
                  <div className="flex items-center justify-between mb-2">
                    <div>
                      <CardTitle className="text-lg font-bold text-foreground">
                        {testimonial.parent}
                      </CardTitle>
                      <p className="text-sm text-muted-foreground">
                        {testimonial.child} 家長
                      </p>
                    </div>
                    <Quote className="h-6 w-6 text-accent" />
                  </div>
                  <Badge variant="outline" className="w-fit text-xs">
                    成功錄取：{testimonial.school}
                  </Badge>
                </CardHeader>
                <CardContent className="space-y-4">
                  <p className="text-muted-foreground leading-relaxed text-sm">
                    {testimonial.content}
                  </p>
                  <div className="flex items-center space-x-1 pt-2 border-t border-border">
                    {[...Array(testimonial.rating)].map((_, i) => (
                      <Star key={i} className="h-4 w-4 fill-secondary text-secondary" />
                    ))}
                    <span className="ml-2 text-sm font-medium text-foreground">
                      {testimonial.rating}.0/5.0
                    </span>
                  </div>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>

        {/* Call to Action */}
        <div className="text-center">
          <Card className="max-w-3xl mx-auto border-none shadow-strong bg-background">
            <CardContent className="p-8">
              <div className="flex justify-center mb-4">
                <div className="bg-gradient-hero rounded-full p-4">
                  <Heart className="h-8 w-8 text-primary-foreground" />
                </div>
              </div>
              <h3 className="text-3xl font-bold text-foreground mb-4">
                讓您的孩子也成為下一個成功故事
              </h3>
              <p className="text-xl text-muted-foreground mb-8">
                立即加入智叻教育大家庭，我們承諾以專業和用心，
                <span className="text-accent font-semibold">讓每個孩子都能綻放最耀眼的光芒</span>
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <button className="bg-gradient-hero text-primary-foreground px-8 py-4 rounded-lg font-semibold shadow-soft hover:shadow-medium transform hover:scale-105 transition-all duration-300">
                  立即預約免費諮詢
                </button>
                <button className="border-2 border-primary text-primary px-8 py-4 rounded-lg font-semibold hover:bg-primary hover:text-primary-foreground transition-all duration-300">
                  了解詳細課程
                </button>
              </div>
              <p className="text-sm text-muted-foreground mt-6">
                📞 諮詢熱線隨時為您服務 | 💬 WhatsApp即時回覆
              </p>
            </CardContent>
          </Card>
        </div>
      </div>
    </section>
  );
};

export default SuccessSection;