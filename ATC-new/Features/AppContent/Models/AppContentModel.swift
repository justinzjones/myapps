struct AppContent: Codable {
    let title: String
    let description: String
    let type: ContentType
    let order: Int
    
    enum CodingKeys: String, CodingKey {
        case title = "Title"
        case description = "Description/Objective"
        case type = "Type"
        case order = "Order"
    }
    
    enum ContentType: String, Codable {
        case appIntro = "AppIntro"
        case app = "App"
        case section = "Section"
    }
} 