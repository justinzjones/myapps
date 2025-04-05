@MainActor
class AppContentViewModel: ObservableObject {
    @Published private(set) var intro: AppContent?
    @Published private(set) var sections: [AppContent] = []
    @Published var isLoading = false
    @Published var error: Error?
    
    private let jsonLoader = JSONLoaderService.shared
    
    func loadContent() async {
        guard intro == nil else { return } // Only load once
        
        isLoading = true
        do {
            let content: [String: [AppContent]] = try await jsonLoader.loadJSON("ATC_content_v1")
            let appContent = content["App Content"] ?? []
            
            intro = appContent.first { $0.type == .appIntro }
            sections = appContent.filter { $0.type == .section }
                .sorted { $0.order < $1.order }
            
        } catch {
            self.error = error
        }
        isLoading = false
    }
} 