import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { 
  Clock, 
  Users, 
  MapPin, 
  CheckCircle, 
  BookOpen, 
  Globe, 
  Star,
  Calendar,
  Target,
  Award
} from "lucide-react";

const CourseSection = () => {
  const courseFeatures = [
    {
      phase: "基礎建立期",
      duration: "首4個月",
      focus: "全面提升學術水平",
      activities: [
        "教授過往面試題型分析",
        "基礎禮儀與應對技巧",
        "中英文表達能力訓練",
        "邏輯思維與解難能力"
      ],
      color: "bg-primary-light"
    },
    {
      phase: "技能深化期", 
      duration: "中間6個月",
      focus: "模擬實戰演練",
      activities: [
        "真實面試情境模擬",
        "小組討論與協作訓練",
        "個人才藝展示指導",
        "家長面試策略分享"
      ],
      color: "bg-secondary-light"
    },
    {
      phase: "實戰衝刺期",
      duration: "最後2-6個月", 
      focus: "針對性強化訓練",
      activities: [
        "心儀學校特定題型精練",
        "一對一個人化指導",
        "Portfolio作品集製作",
        "最後衝刺心理建設"
      ],
      color: "bg-accent-light"
    }
  ];

  const courseInfo = {
    target: "準備報考直資、私立及國際小學的 K2 及 K3 學童",
    duration: "約1年至1年6個月的長期夥伴關係",
    groupClass: {
      frequency: "每週1堂",
      duration: "每堂75分鐘", 
      size: "2位導師對6-8名學生",
      price: "$3,600 / 8堂"
    },
    locations: [
      {
        name: "葵涌校",
        address: "大連排道35-41號金基工業大廈",
        features: ["寬敞教室", "多媒體設備", "圖書角落"]
      },
      {
        name: "灣仔校", 
        address: "駱克道53-55號恒澤商業大廈",
        features: ["核心地段", "交通便利", "停車方便"]
      }
    ]
  };

  return (
    <section id="courses" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <Badge variant="secondary" className="mb-4">
            <BookOpen className="h-4 w-4 mr-2" />
            課程系統
          </Badge>
          <h2 className="text-4xl font-bold text-foreground mb-6">
            智叻 360° 全人發展升小面試課程
          </h2>
          <p className="text-xl text-muted-foreground">
            以真實考核題目為藍本，採用雙語教學，系統化覆蓋面試所有關鍵範疇
          </p>
        </div>

        {/* Three Phase System */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold text-center text-foreground mb-8">三大進階學習階段</h3>
          <div className="grid md:grid-cols-3 gap-8">
            {courseFeatures.map((phase, index) => (
              <Card key={index} className="relative overflow-hidden border-none shadow-soft hover:shadow-medium transition-all duration-300">
                <div className={`absolute top-0 left-0 right-0 h-2 ${phase.color}`}></div>
                <CardHeader className="pb-4">
                  <div className="flex items-center justify-between mb-2">
                    <Badge variant="outline" className="text-xs">
                      第 {index + 1} 階段
                    </Badge>
                    <span className="text-xs text-muted-foreground">{phase.duration}</span>
                  </div>
                  <CardTitle className="text-xl font-bold text-foreground">
                    {phase.phase}
                  </CardTitle>
                  <p className="text-sm text-primary font-semibold">{phase.focus}</p>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-3">
                    {phase.activities.map((activity, idx) => (
                      <li key={idx} className="flex items-start space-x-2">
                        <CheckCircle className="h-4 w-4 text-accent mt-0.5 flex-shrink-0" />
                        <span className="text-sm text-muted-foreground">{activity}</span>
                      </li>
                    ))}
                  </ul>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>

        {/* Course Details */}
        <div className="grid lg:grid-cols-2 gap-12 mb-16">
          {/* Left: Course Info */}
          <div className="space-y-8">
            <Card className="border-none shadow-soft">
              <CardHeader>
                <CardTitle className="flex items-center space-x-2">
                  <Target className="h-5 w-5 text-primary" />
                  <span>課程對象</span>
                </CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-muted-foreground">{courseInfo.target}</p>
              </CardContent>
            </Card>

            <Card className="border-none shadow-soft">
              <CardHeader>
                <CardTitle className="flex items-center space-x-2">
                  <Clock className="h-5 w-5 text-secondary" />
                  <span>課程時長</span>
                </CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-muted-foreground">{courseInfo.duration}</p>
                <div className="mt-4 p-4 bg-muted rounded-lg">
                  <h4 className="font-semibold text-foreground mb-2">小組班詳情</h4>
                  <div className="grid grid-cols-2 gap-4 text-sm">
                    <div>
                      <span className="text-muted-foreground">頻率：</span>
                      <span className="font-medium">{courseInfo.groupClass.frequency}</span>
                    </div>
                    <div>
                      <span className="text-muted-foreground">時長：</span>
                      <span className="font-medium">{courseInfo.groupClass.duration}</span>
                    </div>
                    <div>
                      <span className="text-muted-foreground">師生比：</span>
                      <span className="font-medium">{courseInfo.groupClass.size}</span>
                    </div>
                    <div>
                      <span className="text-muted-foreground">學費：</span>
                      <span className="font-bold text-primary">{courseInfo.groupClass.price}</span>
                    </div>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>

          {/* Right: Locations */}
          <div className="space-y-8">
            <Card className="border-none shadow-soft">
              <CardHeader>
                <CardTitle className="flex items-center space-x-2">
                  <MapPin className="h-5 w-5 text-accent" />
                  <span>上課地點</span>
                </CardTitle>
              </CardHeader>
              <CardContent className="space-y-6">
                {courseInfo.locations.map((location, index) => (
                  <div key={index} className="p-4 border border-border rounded-lg">
                    <h4 className="font-bold text-foreground mb-2">{location.name}</h4>
                    <p className="text-sm text-muted-foreground mb-3">{location.address}</p>
                    <div className="flex flex-wrap gap-2">
                      {location.features.map((feature, idx) => (
                        <Badge key={idx} variant="secondary" className="text-xs">
                          {feature}
                        </Badge>
                      ))}
                    </div>
                  </div>
                ))}
              </CardContent>
            </Card>

            <Card className="border-none shadow-soft bg-gradient-card">
              <CardHeader>
                <CardTitle className="flex items-center space-x-2">
                  <Award className="h-5 w-5 text-primary" />
                  <span>家長夥伴支援</span>
                </CardTitle>
              </CardHeader>
              <CardContent className="space-y-4">
                <div className="flex items-start space-x-3">
                  <CheckCircle className="h-4 w-4 text-accent mt-0.5" />
                  <div>
                    <p className="font-medium text-foreground">課後即時溝通</p>
                    <p className="text-sm text-muted-foreground">導師親自簡報學習重點及進度</p>
                  </div>
                </div>
                <div className="flex items-start space-x-3">
                  <CheckCircle className="h-4 w-4 text-accent mt-0.5" />
                  <div>
                    <p className="font-medium text-foreground">緊密線上聯繫</p>
                    <p className="text-sm text-muted-foreground">WhatsApp隨時解答家長疑難</p>
                  </div>
                </div>
                <div className="flex items-start space-x-3">
                  <CheckCircle className="h-4 w-4 text-accent mt-0.5" />
                  <div>
                    <p className="font-medium text-foreground">獨家策略分享</p>
                    <p className="text-sm text-muted-foreground">神校媽媽顧問提供選校及面試策略</p>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>
        </div>

        {/* CTA Section */}
        <div className="text-center">
          <Card className="max-w-2xl mx-auto border-none shadow-medium bg-gradient-hero text-primary-foreground">
            <CardContent className="p-8">
              <h3 className="text-2xl font-bold mb-4">
                立即開始您孩子的升學之旅
              </h3>
              <p className="mb-6 opacity-90">
                我們的專業團隊已準備好為您和孩子提供最優質的升學準備服務
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button variant="secondary" size="lg" className="flex items-center space-x-2">
                  <Calendar className="h-5 w-5" />
                  <span>預約免費諮詢</span>
                </Button>
                <Button variant="outline" size="lg" className="bg-primary-foreground text-primary hover:bg-primary-foreground/90">
                  <Users className="h-5 w-5 mr-2" />
                  立即報名
                </Button>
              </div>
            </CardContent>
          </Card>
        </div>
      </div>
    </section>
  );
};

export default CourseSection;